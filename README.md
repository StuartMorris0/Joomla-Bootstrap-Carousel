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

###### Carousel class
Add a specific CSS class to the carousel to help with styling.

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
NOTE: You will need to add an image for the item to show in the carousel. If you do not want to add an image but what a custom item, please see the Sample 3 below.

###### Alt tag
The img alt tag in HTML... `<img src="../" alt="This bit..."/>`

###### Image * Header Text
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

###### Image * Caption Text
As above, this is the caption text for the carousel.

###### Image * Button Text
Adding text will show a Bootstrap primary button styled button with the relevant text.

###### Link Type
Button / Image Link (No Button Shown) / No Link - This decides how the link for the carousel works. Button means the only link on the item will be the relevant button. Image Link means the whole carousel item will be a link, this also means no button will be shown as there is no point having a button shown when the whole item is clickable. No Link is... no link.

###### Image * Link
This is linked to the main menu for the Joomla! site and gives you a quick selection for where the link should be to.

###### OR Image * Custom link
Alternatively you can use the custom link for entering a path on your site more specific than the menu options. 


### Examples

###### Sample 1
Inline-style: 
![alt text](https://github.com/StuartMorris0/Joomla-Bootstrap-Carousel/blob/master/Images/sample1.png "Sample 1")
This is a sample item with Header and Caption Text.

###### Sample 2
Inline-style: 
![alt text](https://github.com/StuartMorris0/Joomla-Bootstrap-Carousel/blob/master/Images/sample2.png "Sample 2")
This is a sample with header, caption and button text.

###### Sample 3
Inline-style: 
![alt text](https://github.com/StuartMorris0/Joomla-Bootstrap-Carousel/blob/master/Images/sample3.png "Sample 3")
This is a sample with header, caption and button text. This item is configured with a 1px transparent image as the image. We then add a custom CSS ID for the item and style the background-color for the item based on the ID. You can find a [sample 1px transparent image here](https://github.com/StuartMorris0/Joomla-Bootstrap-Carousel/blob/master/Images/1px_transparent.png)


