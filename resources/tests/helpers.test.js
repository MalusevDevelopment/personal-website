import {describe, it, expect} from 'vitest';
import {getIdent, fetchIdent} from '../js/helpers.js';

describe('test fetchIdent', () => {
  it('fetches from localstorage and cookie is the same', () => {
    const document = {
      cookie: 'analytics=value',
    };

    const storage = {
      values: {
        'analytics': 'value',
      },
      getItem(key) {
        return this.values[key] ?? null;
      },
      setItem(key, value) {
        this.values[key] = value;
      },
    };

    const ident = fetchIdent(storage, document);
    expect(ident).toBe('value');
    expect(storage.values.analytics).toBe('value');
  });
  it('fetches from localstorage but cookie is not the same -> respect localstorage',
      () => {
        const document = {
          cookie: 'analytics=value',
        };

        const storage = {
          values: {
            'analytics': 'other',
          },
          getItem(key) {
            return this.values[key] ?? null;
          },
          setItem(key, value) {
            this.values[key] = value;
          },
        };

        const ident = fetchIdent(storage, document);
        expect(ident).toBe('other');
        expect(document.cookie).toBe('analytics=other');
        expect(storage.values.analytics).toBe('other');
      });
  it('no localstorage', () => {
    const document = {
      cookie: 'analytics=value',
    };

    const storage = {
      values: {},
      getItem(key) {
        return this.values[key] ?? null;
      },
      setItem(key, value) {
        this.values[key] = value;
      },
    };

    const ident = fetchIdent(storage, document);
    expect(ident).toBe('value');
    expect(storage.values.analytics).toBe('value');
  });
  it('no localstorage no cookie', () => {
    const document = {
      cookie: '',
    };

    const storage = {
      values: {},
      getItem(key) {
        return this.values[key] ?? null;
      },
      setItem(key, value) {
        this.values[key] = value;
      },
    };

    const ident = fetchIdent(storage, document);
    expect(ident).toBe('unknown');
    expect(storage.values.analytics).toBe('unknown');
  });
  it('localstorage "unknown" value no cookie', () => {
    const document = {
      cookie: 'analytics=realvalue',
    };

    const storage = {
      values: {
        analytics: 'unknown',
      },
      getItem(key) {
        return this.values[key] ?? null;
      },
      setItem(key, value) {
        this.values[key] = value;
      },
    };

    const ident = fetchIdent(storage, document);
    expect(ident).toBe('realvalue');
    expect(storage.values.analytics).toBe('realvalue');
  });
});

describe('Test getIdent', () => {
  it('gets identifier from one cookie', () => {
    const ident = getIdent('analytics=value');
    expect(ident).toBe('value');
  });
  it('gets identifier from multiple cookies', () => {
    const ident = getIdent('cookie1=value1; analytics=value');
    expect(ident).toBe('value');
  });
  it('gets identifier from multiple cookies as first cookie', () => {
    const ident = getIdent('analytics=value; cookie1=value1');
    expect(ident).toBe('value');
  });
  it('gets identifier from multiple undefined', () => {
    const ident = getIdent(undefined);
    expect(ident).toBe('unknown');
  });
});