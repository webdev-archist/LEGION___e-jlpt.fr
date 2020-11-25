const MiniCssExtractPlugin = require('html-webpack-plugin')


const config = {
    output: {
      filename: '[name]--.--[hash].js',
      path: __dirname + '/public/',
      publicPath: __dirname + '/public/'
    },
    entry: './',
    module: {
        rules: [
            {
              test: /.s?css$/i,
              use: [
                MiniCssExtractPlugin.loader,
                'css-loader',
                'sass-loader'
              ]
            },
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({ filename: '[name]--.--[hash].css' }),
    ],
}

module.exports = config

