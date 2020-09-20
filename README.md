# runroom-test

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- [Docker](https://www.docker.com/) >= 19.03.12

### Installing

1. Clone the repository from GitHub:

   ```bash
   git clone https://github.com/mikelgoig/runroom-test.git && cd runroom-test
   ```

2. Build the project:

   ```bash
   .cli/build.sh
   ```

3. Run the project:

   ```bash
   .cli/up.sh
   ```

## Running the tests

To run all the PHPUnit tests:

```bash
composer test
```

## Built With

- [Composer](https://getcomposer.org/) - Dependency Manager for PHP
- [Docker](https://www.docker.com/) - Enterprise-ready container platform to cost-effectively build and manage your application

## Authors

- **Mikel Goig** - _Backend development_ - [mikelgoig](https://github.com/mikelgoig)
