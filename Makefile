# Makefile to launch lychee with a given URL
# This Makefile provides a simple way to manage the lychee link checker tool
# and ensures a clean interface for launching it.

# Define variables
LYCHEE_CMD = lychee
URL = https://drops-of-php.hi-folks.dev/
URL_LOCAL = http://127.0.0.1:4321/
MARKDOWN_LINT = markdownlint

# Default target
.PHONY: all
all: help

# Help target to display usage instructions
.PHONY: help
help:
	@echo "Makefile for running checker tools"
	@echo
	@echo "Available targets:"
	@echo "  run-url       - Run links checker for $(URL)"
	@echo "  run-url-local - Run links checker for $(URL_LOCAL)"
	@echo "  run-md-lint   - Run Markdown checker"
	@echo "  check         - Check if the needed tools are installed"
	@echo "  clean         - Clean temporary files if any"
	@echo "  help          - Display this help message"
	@echo
	@echo "To launch links checker, run: make run-url"

# Run target to launch lychee with the specified URL
.PHONY: run-url
run-url:
	@echo "Running lychee on URL: $(URL)"
	$(LYCHEE_CMD) $(URL)

.PHONY: run-url-local
run-url-local:
	@echo "Running lychee on URL: $(URL_LOCAL)"
	$(LYCHEE_CMD) $(URL_LOCAL)

.PHONY: run-md-lint
run-md-lint:
	@echo "Running Markdown lint checker $(MARKDOWN_LINT)"
	$(MARKDOWN_LINT) --config markdown-lint.json src/content/docs/**/*.md

# Check to ensure lychee is available
.PHONY: check
check:
	@echo "Checking if lychee is installed..."
	@if ! command -v $(LYCHEE_CMD) > /dev/null; then \
		echo "  🚫 Lychee not found. You should install it."; \
	else \
		echo "  ✅ Lychee is already installed."; \
	fi
	@echo "Checking if Markdown Linter is installed..."
	@if ! command -v $(MARKDOWN_LINT) > /dev/null; then \
		echo "  🚫 Markdown linter not found. You should install it."; \
	else \
		echo "  ✅ Markdown linter is already installed."; \
	fi
# Clean target (useful if temporary files are created in the future)
.PHONY: clean
clean:
	@echo "No temporary files to clean currently."
	@echo "This target can be used to clean up generated files in future workflows."
