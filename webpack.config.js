<<<<<<< HEAD
const path = require('path');

  module.exports = {
    entry: 'index.php',
    output: {
      filename: 'bundle.js',
      path: path.resolve(__dirname, 'dist')
    },
    module: {
      rules: [
        {
          test: /\.css$/,
          use: [
            'style-loader',
            'css-loader'
          ]
        },
      {
         test: /\.(png|svg|jpg|gif)$/,
         use: [
           'file-loader'
         ]
       }
      ]
    }
  };
=======
const path = require('path');

  module.exports = {
    entry: 'index.php',
    output: {
      filename: 'bundle.js',
      path: path.resolve(__dirname, 'dist')
    },
    module: {
      rules: [
        {
          test: /\.css$/,
          use: [
            'style-loader',
            'css-loader'
          ]
        },
      {
         test: /\.(png|svg|jpg|gif)$/,
         use: [
           'file-loader'
         ]
       }
      ]
    }
  };
>>>>>>> 9fbc4300d8ebb1da52ad1d1e8f23532c220590fc
