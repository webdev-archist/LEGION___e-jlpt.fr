const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const HtmlWebpackPlugin = require('html-webpack-plugin')
const { CleanWebpackPlugin } = require('clean-webpack-plugin')

// console.log(new MiniCssExtractPlugin({ filename: '[name]--.--[hash].css' }).loader);
const config = {
    output: {
      // filename: '[name]--.--[hash].js',
      path: __dirname + '/public/',
      publicPath: __dirname + '/public/'
    },
    entry: './assets',
    plugins: [
        new MiniCssExtractPlugin(),
        // new MiniCssExtractPlugin({ filename: 'ejlpt---[name].[hash].css' }),
        new CleanWebpackPlugin(),
    ],
    module: {
        rules: [
          {
            test: /\.js$/,
            exclude: /(node_modules|bower_components)/,
          },
          {
            test: /.s?css$/i,
            use: [
              MiniCssExtractPlugin.loader,
              // 'style-loader',
              'css-loader',
              'sass-loader'
            ]
          },
        ]
    },
}

module.exports = config

