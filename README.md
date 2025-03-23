## Links Page

### Description
I have created a basic framework in PHP that reads from json files and creates a page that displays a list of links.  

### Setup Instructions
Clone this repository into your desired web root.  Once installed, create the `.json` folder inside the project directory and add the `db.json` and `links.json` files.  This application assumes these two files exist, and uses them to produce the output page, which is an HTML document with page header, page footer, and a list of links.

## Demo
http://links-page.selfip.info/

#### /.json/db.json
```
{
    "version" : "0.1",
    "site" : "http://demos.localhost/mattc",
    "files" :  [
        "links.json",
        "page.json"
    ]
}
```

#### /.json/links.json
```
[
    {
        "href" :  "https://demos.local/mattc/links/index.php?t=1",
        "text" : "Links Page Test"
    },
    {
        "href" : "https://mattcascardi.info/",
        "text" : "Matt C"
    }
]
```
