# Power Consumption Analysis

This repository contains a comprehensive analysis of power consumption data for the city of Delhi, India. The analysis involves data preprocessing, time series decomposition, and modeling using ARIMA and SARIMA models.

## Project Overview

The dataset used for this analysis includes daily power consumption values for Delhi from January 2019 to December 2020. The analysis focuses on exploring the time series data, identifying trends, seasonality, and residuals, and developing predictive models to forecast future power consumption.

## Dataset

The dataset used is `dataset_tk.csv`, which contains daily power consumption values for various states in India. For this analysis, only the data for Delhi is considered.

### Data Columns
- `Date`: Date of the observation.
- `Delhi`: Power consumption in Delhi on that date.

## Analysis Steps

1. **Data Preprocessing**
   - Load and clean the dataset.
   - Rename columns and handle missing values.
   - Convert the date column to a datetime format and set it as the index.
   - Resample the data to daily frequency and interpolate missing values.

2. **Time Series Decomposition**
   - Decompose the time series into trend, seasonal, and residual components using a multiplicative model.
   - Plot the decomposed components for analysis.

3. **Seasonal Analysis**
   - Analyze the power consumption by month and day.
   - Plot power consumption trends across different days of the month.

4. **Seasonal Adjustment**
   - Adjust the trend component for seasonality and plot the seasonally adjusted trend.

5. **Autocorrelation Analysis**
   - Plot the Autocorrelation Function (ACF) and Partial Autocorrelation Function (PACF) to understand the autocorrelation in the data.

6. **Differencing and Stationarity Test**
   - Perform differencing to make the series stationary.
   - Conduct the Dickey-Fuller test to check for stationarity.

7. **Modeling**
   - Use the `pmdarima` library to automatically select the best ARIMA model.
   - Fit a SARIMA model to the training data and evaluate its performance.

## Installation

To run this analysis, you need to have the following libraries installed:

- `pandas`
- `matplotlib`
- `seaborn`
- `plotly`
- `statsmodels`
- `pmdarima`

## Results

The analysis will generate various plots, including:

- Time series plot of power consumption.
- Decomposition of time series into trend, seasonal, and residual components.
- Seasonal plots for each day of the month.
- Seasonally adjusted trend plot.
- Autocorrelation and partial autocorrelation plots.
- Model fitting results.

