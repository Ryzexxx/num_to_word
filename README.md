# Number to Word Converter

A simple PHP program that converts a number to English words.

## Requirements

- Docker (if you want to run the program using Docker)
- PHP 7.0 or higher (if you want to run the program without Docker)

## Running the program with Docker

Clone the repository:

```sh
git clone https://github.com/Ryzexxx/num_to_word.git
```

Build Docker Image:

```sh
bash Docker_build.sh
```

Run PHP Program from Docker Run Command:

```sh
docker run --rm num_to_word php num_to_word.php 1234
```

Run PHP Program without Docker:

```sh
php num_to_word.php 1234
```