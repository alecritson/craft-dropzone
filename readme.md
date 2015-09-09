# Dropzone.js craft plugin

This is a plugin which will allow you to upload images to an asset folder using <a href="http://www.dropzonejs.com/">Dropzone.js</a>. I have a need for this functionality across projects on a frequent basis, so figured I would create this plugin to make the process a little easier, so its been made to work out the box.

**This plugin is very much considered in beta** - Use at your own risk but having said that its pretty simple at the minute so you shouldn't have any problems.

## Installation
Copy the `dropzone` folder to `craft/plugins` and install in the admin area. To update, just replace the `dropzone` folder and refresh the admin area in Craft.

## Plugin settings
There are a couple of plugin settings, to do with adding a theme for dropzone or not. Should be handy in the future...

## Usage
Alrighty, so here is how you get this to work, just put this in your template (no need to nest in a form or worry about action URLs, it's all taken care of)

```twig
{{ craft.dropzone.form({
    sourceId : 2
})|raw }}
```

Notice the `|raw` filter, this is required otherwise twig will escape the HTML for the form, will work on that...

**Parameters**  
- `sourceId` - this is the id of the asset source you want to upload to 

**You must be logged in for this to work**  

### Roadmap

- [ ] - Allow option for anonymous uploads
- [ ] - Allow uploads to an entries asset field using an entry form
- [ ] - Allow dropzone to be entirely configurable
- [ ] - Add some kickass themes 

### Issues, Feature requests, Feedback
Just create an issue on this repo and I will take a look at it :)