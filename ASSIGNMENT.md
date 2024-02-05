# Raketech Code Challenge

Congratulations on reaching this stage!

We wish to invite you to this code challenge where you can showcase your technical abilities.
Please read the task description below carefully and create your own GitHub repository/ies
to commit your code. When you are done, please send us the link to the repository/ies. Don’t
forget to add a README with details on how to execute the app. Even if the task seems small,
please try to apply the proper design patterns and best practices as if it were a large-scale
application, with a codebase as scalable, clean, and easy to maintain as possible.

## Task Description

You are requested to create a small web application, displaying all available countries and
their respective flags in a single page layout. The application should require authentication,
which must be implemented with the third-party provider <strong>Auth0 *</strong>. The application should
consist of the following parts:

- **Backend (Laravel):** The backend should fetch the country names and flag images (only URLs, no need to
  store files) from this API [https://restcountries.com/](https://restcountries.com/) and serve them properly from the
  respective controller, ideally while using common PHP/Laravel design patterns. Keep
  in mind that since it’s based on an external API, the implementation should be made
  in such a way that the API could easily be replaced if needed. Though there is no need
  for local storage (database or otherwise), bonus points will be awarded for the
  implementation of the caching mechanism of your choice.

- **Frontend (Vue.js):** The frontend should get the list of countries from the backend and display a grid of
  country names with their respective flag image above the text. Feel free to create a
  responsive layout as you desire with the framework of your choice or pure CSS –
  bonus points will be awarded for the usage of a popular framework like Tailwind.

Last but not least, note that the whole application should ideally be dockerised, for easier
local development and deployments.

*You can register for a free Auth0 account at auth0.com and create a “Regular Web Application” in order to do
   the implementation according to the documentation provided there.  

## Good luck!
