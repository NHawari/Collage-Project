# Software Engineering Phase: Vending Machine Sales Analysis in Central New Jersey (2022)
## Overview
Following the completion of data analysis and visualization, the project moves into the software engineering phase. This phase focuses on developing an interactive and responsive dashboard website to present the insights derived from the vending machine sales data collected from four locations in Central New Jersey throughout 2022. The dashboard will serve as a tool for stakeholders to explore the data, visualize trends, and make informed decisions to optimize vending machine operations.

## Project Structure
The dashboard is constructed using a combination of HTML, CSS, and JavaScript, ensuring a responsive design that provides a seamless experience across various devices. This phase emphasizes the translation of analytical insights into an accessible and interactive format.

## Key Components
- **HTML Structure**: The dashboard layout is structured using semantic HTML elements such as `<nav>`, `<section>`, `<article>`, and `<aside>` to promote clarity and accessibility. These elements are strategically placed to host different sections of the dashboard, including charts, data tables, and interactive filters relevant to vending machine sales.

- **CSS Layout**: The design is styled using a basic CSS file that defines global styles, including the font-family and color scheme consistent with the project's branding. CSS Flexbox is employed to create a fluid navigation bar and footer, while CSS Grid is used to manage the main content layout of the dashboard. Media queries are integrated to ensure that the layout adjusts dynamically to different screen sizes, providing an optimal user experience.

- **Responsive Design**: The dashboard is built with responsiveness in mind, adapting smoothly to various devices:

  - **Mobile Phones**: The layout is optimized for smaller screens, ensuring content remains accessible without excessive scrolling or zooming. The navigation bar collapses into a hamburger menu, and the grid layout reorganizes into a vertical stack for easy navigation.

  - **Tablets**: On medium-sized screens, the layout adjusts to utilize the available space more effectively, typically transitioning from a single-column layout to a two-column layout.

  - **Desktop**: For larger screens, the dashboard displays a full layout with multiple columns, allowing users to view various data sections simultaneously, leveraging the broader screen space.

- **JavaScript Interactivity**: JavaScript plays a crucial role in loading and parsing the local JSON file that contains the cleaned and analyzed vending machine sales data. The dashboard dynamically updates to display relevant data in response to user interactions. JavaScript functions are also written to enable sorting, filtering, and updating of the dashboard content, with interactive features like dropdowns, charts, and modals being implemented using Chart.js.

## Deployment
The final dashboard will be deployed on Vercel, providing a live platform where users can interact with the vending machine sales data from Central New Jersey. The website will be connected to a custom domain for easy access, making it available to stakeholders and decision-makers.

## View the Live Dashboard
You can view the live dashboard at the following link: [View Dashboard](https://jayapura-tim-1.vercel.app/index.html).
