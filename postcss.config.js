// export default {
//   plugins: {
//     tailwindcss: {},
//     autoprefixer: {},
//   },
// }
// module.exports = {
//   plugins: {
//     'postcss-import': {},
//     'tailwindcss/nesting': {},
//     tailwindcss: {},
//     autoprefixer: {},
//   }
// }
module.exports = {
  plugins: [
    require("tailwindcss/nesting"),
    require("tailwindcss"),
    require("autoprefixer"),
    ...(process.env.NODE_ENV === "production"
      ? [
          require("cssnano")({
            preset: "default",
          }),
        ]
      : []),
  ],
};
