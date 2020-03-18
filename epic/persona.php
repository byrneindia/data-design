<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./styles.css">
	<title>Data Design Project</title>
</head>
<body>
<h2>User Persona:</h2>
<img src="Frugal%20Penny.jpg"</>
   <li><strong>Name:</strong> Penny Pinching</li>
	<li><strong>Age:</strong> 22</li>
	<li><strong> Gender:</strong> Female</li>
	<li><strong>Ethnicity:</strong> Africian American</li>
	<li><strong>Occupation:</strong> Overnight Stocker</li>
<li><strong>Technology:</strong> Samsung S9+ <em>Andriod</em>, iPad Air 2 <em>iOS</em>, HP Omen <em>Windows10</em>.</strong></li>
	<li><strong>Demeanor:</strong> Tired, Overworked, Underpaid, Frugal, Determined, Kind.</li>
   <li><strong>Ideal Features:</strong>
		<br>&emsp;Colorful instructional photos.
		<br>&emsp;Simple layout with clear instructions.
		<br>&emsp;Cost explained accurately.
		<br>&emsp;Variety of recipes.
		<br>&emsp;Mobile version necessary.
		<br>&emsp;No sign up required.
		<br>&emsp;No additional vlogging.
<li><strong>Frustrations and Challenges:</strong>
	<br>&emsp;Websites requiring signing up before content is shared.
	<br>&emsp;Excessive vlogging that distracts and makes finding the recipe content more difficult.
	<br>&emsp;Information is inaccurate, weather it be the price of the food items or a bad recipe.
	<h2>User Story:</h2>
	As a user, Penny wants access to inexpensive recipe ideas at anytime.
	<h2>Use Case:</h2>
<li><strong>Title:</strong> Preparing dinner via instructional online recipe.</li>
	<li><strong>Username/Role:</strong> Penny, young cooking enthusiast.</li>
<li><strong>Usage preconditions:</strong> Penny only needs access to mobile devices.
<li><strong>Usage postconditions:</strong> Penny will create a new account with a username and password show that she may keep up to date on the latest recipes. She will also follow on Instagram and Facebook.
<li><strong>Interaction Flow:</strong>
	<br> <em>a.</em> Penny opens her iPad and types https://www.budgetbytes.com/ into the Safari browser.
	<br> <em>b.</em> The server returns the front page of BudgetBytes.
	<br> <em>c.</em> Penny selects the recipes hamburger menu and selects pork as her meat.
	<br> <em>d.</em> The sever completes the request and returns recipes with pork as a main entree.
	<br> <em>e.</em> Penny scrolls through and selects Ham and Cheese Biscuits https://www.budgetbytes.com/ham-cheese-biscuits/.
	<br> <em>f.</em> Penny preps her ingredients and stays on the current web page as she follows along with the instructions.
	<br> <em>g.</em> After completed dinner Penny bookmarks the recipe. The browser saves and favorites the link.
	<br> <em>h.</em> Penny is very happy with her experience and proceeds to like on Facebook and Instagram as well as downloading the application on her mobile devices.
	<li><strong>Frequency Of Use:</strong> Every other day.


<h2>Conceptual Model</h2>
	<h3> Entities & Attributes</h3>

<li><strong>Entity: Recipe (Strong)</strong>
	<br>recipesId
	<br>recipesPicture
	<br>recipesContent
	<br>recipesDescription</li>

<li><strong>Entity: Category</strong>
	<br>categoryId
	<br>categoryDescription

<li><strong>RecipeCategory</strong>
	<br>recipeCategoryID
	<br>recipeCategoryCategoryID

<li><strong>Relationship</strong></li>
	One recipe can be in many categories.
	<br>Many recipes can in many categories.


<h2>Entity Relationship Diagram</h2>
	<img src="ERD.png"
		  width="600"
		  height="400">



















