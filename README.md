# DiscoverFramework_v1.2
This is the framework behind the flagship application DiscoverWater. The code has been generalized for adaptation. For full working production code, visit the DiscoverWater repository.

The index.php file drives the application website. It  using the "includes" folder.

The "head" section contains the metadata for the application you are building, Google analytics code, and the CSS that provides the framework and controls the display of the charts and maps html files.
  
The "body" section is where you add the content to be displayed by the application. 
  
The "includes" lines of code will pull the map and charts html files from the includes folder into the page and place them in containers formatted by the CSS code. No change is necessary to these lines of code unless you change the file or folder names. 

The Element 3 container provides the narrative for the visualization. This is should be customized to fit the story the data tells. 
  
The final component of the body section is the code for a HTML comment box to allows users to converse about the visualization. You can create a free account to set up your own comment box.

# Includes
# map.html
This is the html page the drives Element 1 of the framework. You will need a free Mapbox account to create this component. Use Mapbox Studio to create styled maps and add custom static shapefiles.

Any interactive and animated layers can be added to the map using Mapbox JavaScript library.

# highchart.html
This is the html page that drive Element 2 of the framework. You can use the Highcharts javascript library for free if you are an academic or non-profit organization. Visit highcharts.com for more details about licensing.

There are 4 charts, and each can display it's own unique data set. All four charts must contain the same temporal range. Substitute "null" if there the temporal ranges don't align. All four charts must contain the same temporal indexing. It's better to repeat the value of an annual data set twelve times to create twelve montly points (these will appear as a straight line when plotted). This ensures the indexing lines up for the synchronized cursor to work.

Fields that need to be udpated include, the file source, title/subtitle, y-axis label, tooltip label, caption, and legend if desired.
