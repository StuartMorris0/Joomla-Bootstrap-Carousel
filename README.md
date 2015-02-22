# Joomla-Bootstrap-Carousel
#### A custom Joomla! Module that implements the standard Bootstrap Carousel with multiple configuration options.
[Created and Maintained by Morris Projects Ltd](http://morrisprojects.com)

Note: This was setup and tested using the Morris Projects Base - Bootstrap Joomla Template. This uses the latest version of Bootstrap (at time of writing v3.3.2) and Joomla! v3.3.6.
If you are using any version before or template please let us know if this works/any issues.

### Module Configuration
There are multiple configuration options for the module to help style and fit your site better. 
A Joomla Module for the Bootstrap Carousel by Morris Projects Ltd. Includes the ability to add up to 10 images with different configuration options for the layout of the carousel and items in the carousel.

###### Show in Container
Controls if the carousel is displayed in a Bootstrap container... `<div class="container">...`

###### Carousel ID
Add a specific CSS ID to the carousel to help with styling. This is also required for the directional arrows/tabs to work in the carousel.

###### Use Directional Nav?
Switch on and off the default arrows for the carousel.

###### Use control nav?
Switch on and off the under control blobs for the carousel.

###### Slide Interval Time
Control the slide speed of the items in the carousel in ms, defaulted to 5000 like Bootstrap.

### Image Configuration
Images for the carousel are controlled from the Module > Images tab. You have the option to have 10 images/items.

###### Image *
This is the path/image file that you would like to show as the background for the item in the carousel.

###### Alt tag
The img alt tag in HTML... `<img src="../" alt="This bit..."/>`

###### Image 1 Header Text
This is the heading content in the image carousel caption. This uses the same format as recommended by Bootstrap.  
```html
<div class="item">
  <img src="..." alt="...">
  <div class="carousel-caption">
    <h3>...</h3>
    <p>...</p>
  </div>
</div>
```