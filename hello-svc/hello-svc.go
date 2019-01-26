package main

import (
	"fmt"
	"net/http"
)

func main() {
	http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {
		fmt.Fprintf(w, "Hello from Antwerp %s\n", r.URL.Query().Get("name"))
	})

	http.ListenAndServe(":3001", nil)
}
