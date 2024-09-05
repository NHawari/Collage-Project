# Google Play Store Data Analysis

This project performs an exploratory data analysis (EDA) on a dataset from the Google Play Store. The dataset contains information about various apps, including their category, rating, reviews, size, installs, and more.

## Overview
The goal of this project is to analyze the Google Play Store dataset to uncover insights related to app categories, ratings, user reviews, and other key features. Through this analysis, we aim to understand patterns and trends that may provide value to developers, marketers, or data enthusiasts.

## Dataset
The dataset used for this analysis can be found [here](https://www.kaggle.com/lava18/google-play-store-apps).

- **File**: `googleplaystore.csv`
- **Rows**: 10,000+
- **Columns**: App, Category, Rating, Reviews, Size, Installs, Type, Price, Content Rating, Genres, Last Updated, Current Ver, Android Ver

## Project Structure

- **data-analysis-of-google-play-store.ipynb**: The main Jupyter Notebook containing the code for the analysis.
- **googleplaystore.csv**: The dataset used for analysis.
- **README.md**: This file explaining the project.

## Analysis Steps
1. **Loading Data**: We start by loading the dataset and inspecting its structure using `pandas`.
2. **Data Cleaning**: Cleaning the dataset by handling missing values, removing outliers, and correcting erroneous entries.
3. **Exploratory Data Analysis (EDA)**: Visualizing distributions, relationships, and key statistics using `seaborn`, `matplotlib`, and `plotly`.
4. **Feature Analysis**: Analyzing features such as app categories, user ratings, and installs to identify trends.
5. **Data Visualization**: Using various plots and graphs to visually represent the findings.

## Insights
- **Top 10 Categories by Number of Apps**: The categories with the highest number of available apps on the Google Play Store.
- **Top 10 Categories by Total Installs**: Categories with the most downloads, indicating popularity among users.
- **Top 10 Categories by Total Reviews**: These categories have the highest number of user reviews, showcasing high engagement.
- **Top 10 Categories by Average Rating**: The best-rated categories based on user feedback.
- **Top 10 Categories by Average Price**: Categories with the highest average app prices, indicating potential revenue opportunities.
