package streamjson

import (
	"encoding/json"
	"io"
)

type StreamingJson[T any] struct {
	r *json.Decoder
    cb func(T) []byte
}


func New[T any](r io.Reader, cb func(T) []byte) *StreamingJson[T] {
	return &StreamingJson[T]{
        r: json.NewDecoder(r),
        cb: cb,
    }
}

func (s *StreamingJson[T]) Read(p []byte) (n int, err error) {
	if !s.r.More() {
		return 0, io.EOF
	}

	var out T
	if err := s.r.Decode(&out); err != nil {
		return 0, err
	}

	return copy(p, s.cb(out)), nil
}
