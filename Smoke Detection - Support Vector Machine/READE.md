
# Smoke Detection using Support Vector Machine (SVM)

This project involves building a machine learning model using Support Vector Machines (SVM) to detect smoke based on various environmental and chemical sensor readings. The dataset used for this project contains attributes like temperature, humidity, volatile organic compounds, and particulate matter, which can indicate the presence of smoke.

## Table of Contents
- [Overview](#overview)
- [Dataset](#dataset)
- [Project Structure](#project-structure)
- [Analysis Steps](#analysis-steps)
- [Results](#results)

## Overview
The primary objective of this project is to create a model that can predict whether a fire alarm should be triggered based on the provided sensor data. The Support Vector Machine (SVM) classifier is utilized for this purpose. The dataset includes various environmental factors that are useful in identifying the presence of smoke.

## Dataset
The dataset used in this project is available from [Kaggle](https://www.kaggle.com/datasets/deepcontractor/smoke-detection-dataset). It contains multiple sensor readings that can help determine whether smoke is present.

### Dataset Attributes:
1. **UTC**: Timestamp of when the data was recorded (in seconds since Epoch).
2. **Temperature [C]**: Air temperature in degrees Celsius.
3. **Humidity [%]**: Air humidity as a percentage.
4. **TVOC [ppb]**: Total volatile organic compounds in parts per billion.
5. **eCO2 [ppm]**: CO2 equivalent concentration in parts per million.
6. **Raw H2**: Raw molecular hydrogen levels.
7. **Raw Ethanol**: Raw ethanol gas levels.
8. **Pressure [hPa]**: Air pressure in hectopascals.
9. **PM1.0, PM2.5**: Particulate matter concentration.
10. **NC0.5, NC1.0, NC2.5**: Number concentration of particulate matter of various sizes.
11. **CNT**: Sample counter.
12. **Fire Alarm**: Target variable (1 = fire detected, 0 = no fire).

## Project Structure
- **svm-smoke-detection.ipynb**: Jupyter Notebook containing the data analysis and model implementation.
- **smoke_detection_iot.csv**: The dataset used for training and evaluation.
- **README.md**: Project documentation file.

## Analysis Steps
1. **Data Loading**: Load and inspect the dataset.
2. **Data Cleaning**: Handle missing or irrelevant columns and check for correlations.
3. **Feature Engineering**: Select relevant features for building the model.
4. **Model Selection**: Train a Support Vector Machine (SVM) classifier.
5. **Cross-Validation**: Apply KFold cross-validation to evaluate model performance.
6. **Hyperparameter Tuning**: Optimize model parameters using GridSearchCV and RandomizedSearchCV.
7. **Performance Evaluation**: Assess the model using accuracy, confusion matrix, and classification report.

## Results
- **Accuracy**: The model achieved a certain level of accuracy in predicting the presence of smoke.
- **Confusion Matrix**: Displays the true positives, true negatives, false positives, and false negatives.
- **Classification Report**: Shows precision, recall, and F1 scores for the model.
