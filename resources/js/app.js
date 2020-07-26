

if (typeof jQuery === "undefined") {
  throw new Error("StarterTheme requires jQuery");
}

$.starterTheme = {};

$.starterTheme.options = {
  extendedMenu: true,
  screenSizes: {
    xs: 480,
    sm: 768,
    md: 992,
    lg: 1200
  }
};
