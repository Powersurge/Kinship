# Kinship API v1

Base path:

/api/v1


---

## People

### List people

GET /people

Response:

```json
{
    "people": []
}
```
### Get person

GET /people/{id}

## Families

### List families

GET /families

### Get family

GET /families/{id}

## Relationships

### List relationships

GET /relationships

### Person relationships

GET /people/{id}/relationships

## Events

### List events

GET /events

### Person events

GET /people/{id}/events

### Family events

GET /families/{id}/events


Future API versions may add:

authentication controls
write operations
import/export
extension APIs
