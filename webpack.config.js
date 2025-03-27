const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  mode: "development", // Change to "production" for optimized build
  entry: "./src/index.js", // Main entry point
  output: {
    path: path.resolve(__dirname, "dist"), // Output to dist folder
    filename: "bundle.js",
  },
  module: {
    rules: [
      {
        test: /\.css$/, // Handle CSS files
        use: [MiniCssExtractPlugin.loader, "css-loader"],
      }
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "style-index.css", // Output CSS file
    }),
  ],
  devtool: "source-map", // Helps with debugging
};
