<?php

declare(strict_types=1);

namespace App\Mixins;

use Closure;
use Tpetry\PostgresqlEnhanced\Schema\Builder;

class PostgresEnumMixin
{
    public function createEnum(): Closure
    {
        return function (string $name, array $values) {
            /** @var $this Builder */
            $conn = $this->getConnection();
            [$name, $value] = FormatEnumArgs::formatArgs($conn, $name, $values);
            $conn->statement("CREATE TYPE $name AS ENUM ($value);");
        };
    }

    public function createEnumIfNotExists(): Closure
    {
        return function (string $name, array $values) {
            /** @var $this Builder */

            $conn = $this->getConnection();
            [$name, $value] = FormatEnumArgs::formatArgs($conn, $name, $values);
            $conn->statement(
                <<<SQL
                DO $$ BEGIN
                    CREATE TYPE $name AS ENUM($value);
                EXCEPTION
                    WHEN duplicate_object THEN null;
                END $$;
                SQL
            );
        };
    }

    public function dropEnum(): Closure
    {
        return function (string $name) {
            /** @var $this Builder */
            $conn = $this->getConnection();
            [$name] = FormatEnumArgs::formatArgs($conn, $name, []);
            $conn->statement("DROP TYPE $name;");
        };
    }

    public function dropEnumIfExists(): Closure
    {
        return function (string $name) {
            /** @var $this Builder */
            $conn = $this->getConnection();
            [$name] = FormatEnumArgs::formatArgs($conn, $name, []);
            $conn->statement(
                <<<SQL
                DO $$
                BEGIN
                    DROP TYPE $name;
                EXCEPTION
                    WHEN undefined_object THEN null;
                END $$;
                SQL
            );
        };
    }

    public function renameEnum(): Closure
    {
        return function (string $type, string $newName) {
            /** @var $this Builder */
            $conn = $this->getConnection();
            [$type] = FormatEnumArgs::formatArgs($conn, $type, []);
            [$newName] = FormatEnumArgs::formatArgs($conn, $newName, []);
            $conn->statement("ALTER TYPE $type RENAME TO $newName;");
        };
    }

    public function renameEnumValue(): Closure
    {
        return function (string $type, string $oldName, string $newName) {
            /** @var $this Builder */
            $conn = $this->getConnection();
            [$oldName] = FormatEnumArgs::formatArgs($conn, $oldName, []);
            [$newName] = FormatEnumArgs::formatArgs($conn, $newName, []);
            $conn->statement("ALTER TYPE $type RENAME VALUE  $oldName TO $newName;");
        };
    }

    public function addEnumValue(): Closure
    {
        return function (string $type, string $value, ?PgEnumAddValueDirection $direction = null, ?string $otherValue = null, bool $ifNotExists = false) {
            /** @var $this Builder */
            $conn = $this->getConnection();
            [$type, $value] = FormatEnumArgs::formatArgs($conn, $type, [$value]);
            $stmt = "ALTER TYPE $type ADD VALUE";

            if ($ifNotExists) {
                $stmt .= " IF NOT EXISTS";
            }

            $stmt .= " $value";

            if ($direction && $otherValue) {
                $stmt .= " $direction->value $otherValue";
            }

            $conn->statement($stmt);
        };
    }

    public function addEnumValueIfNotExist(): Closure
    {
        return $this->addEnumValue();
    }
}
