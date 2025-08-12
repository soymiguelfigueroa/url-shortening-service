# URL Shortening Service

This project is a URL Shortener API that helps shorten long URLs.

## Project URL

[Roadmap URL Shortening Service](https://roadmap.sh/projects/url-shortening-service)

## Requirements

You will need PHP (V8 or higher) and MySQL to use this app. I reccomend you XAMPP to use this app.

## Endpoints

### POST url

```
/api/url
{
  "url": "https://www.example.com/some/long/url"
}
```

#### Response

```
{
  "id": "1",
  "url": "https://www.example.com/some/long/url",
  "shorten": "abc123",
  "createdAt": "2021-09-01T12:00:00Z",
  "updatedAt": "2021-09-01T12:00:00Z"
}
```

### GET url

```
/api/url/abc123
```

#### Response

```
{
  "id": "1",
  "url": "https://www.example.com/some/long/url",
  "shorten": "abc123",
  "createdAt": "2021-09-01T12:00:00Z",
  "updatedAt": "2021-09-01T12:00:00Z"
}
```

### PUT url

```
/api/url/abc123
{
    "url": "https://www.example.com/some/updated/url"
}
```

#### Response

```
{
  "id": "1",
  "url": "https://www.example.com/some/updated/url",
  "shorten": "abc123",
  "createdAt": "2021-09-01T12:00:00Z",
  "updatedAt": "2021-09-01T12:30:00Z"
}
```

### DELETE url

```
/api/url/abc123
```

### Get url stats

```
/api/url/abc123/stats
```

#### Response

```
{
    "access_count": 0
}
```
