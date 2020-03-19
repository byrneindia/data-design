Use ibyrne1;
DROP TABLE IF EXISTS RecipeCategory;
DROP TABLE IF EXISTS category;
DROP TABLE IF EXISTS recipe;

CREATE TABLE recipe (
	recipesId          BINARY(30) NOT NULL,
	recipesContent     VARCHAR(4000),
	recipesDescription VARCHAR(4000),
	recipePicture      VARCHAR(4000),
	PRIMARY KEY (recipesId)
);
CREATE TABLE category (
	categoryId BINARY(16) NOT NULL,
	categoryDescription VARCHAR(4000),
	PRIMARY KEY (categoryId)
);
CREATE TABLE RecipeCategory (
	CategoryID       BINARY(225) NOT NULL,
	recipeCategory   BINARY(16)  NOT NULL,
	recipeCategoryID BINARY(16)  NOT NULL,
	PRIMARY KEY (recipeCategoryID),
	FOREIGN KEY (CategoryID) REFERENCES category(CategoryID)
);

desc recipe;

