# Kinship

> A modern family management and genealogy platform for Nextcloud.

## Overview

Kinship is an open-source Nextcloud application for managing family information, genealogy, events, and shared memories.

Unlike traditional genealogy software, Kinship is designed as a platform. The core application provides the fundamental building blocks for family management while allowing additional functionality to be added through extensions.

## Features (v0.1)

- People management
- Family management
- Relationship management
- Family events
- Timeline
- Media attachments
- Search
- REST API
- Role-based permissions

## Planned Extensions

- GEDCOM Import/Export
- Interactive Family Tree
- Calendar Synchronization
- AI-assisted Record Extraction
- DNA Integration
- Historical Maps
- Family Recipes
- Memorial Pages
- Reports
- Dashboard Widgets

## Architecture

```
People
    │
Relationships
    │
Families
    │
Events
    │
Media
```

The core remains intentionally lightweight. Advanced functionality is implemented as optional extensions.

## Technology

- PHP 8.2+
- Nextcloud App Framework
- Vue 3
- Vite
- Composer
- PHPUnit

## Development

Clone the repository:

```bash
git clone https://github.com/<your-username>/kinship.git
cd kinship
```

Install PHP dependencies:

```bash
composer install
```

Install JavaScript dependencies:

```bash
npm install
```

Build assets:

```bash
npm run build
```

## Roadmap

### v0.1
- Project foundation
- People
- Families
- Relationships
- Events
- Timeline

### v0.2
- Search
- Notifications
- Dashboard
- Plugin SDK

### v1.0
- Stable Extension API
- Complete Documentation
- Production Release

## Contributing

Contributions are welcome.

Please submit pull requests for bug fixes, documentation improvements, and new extensions.

## License

GNU Affero General Public License v3.0
