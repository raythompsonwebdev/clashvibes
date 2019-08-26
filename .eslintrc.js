module.exports = {
    "root": true,
    "env": {
        "browser": true,
        "commonjs": true,
        "es6": true,
        "jquery": true
    },
    "extends": [
      "eslint:recommended",
      "plugin:jquery/deprecated"

    ],
    "globals": {
      "document": "readonly",
      "navigator": "readonly",
      "window": "readonly",
      "$": true

    },
    "parserOptions": {
        "ecmaVersion": 2019,
        "sourceType": "module"

    },
    "plugins": [
      "dollar-sign",
      "jquery"
    ],
    "rules": {
      "no-console": 1,
      "dollar-sign/dollar-sign": [
        2,
        "ignoreProperties"
      ]

    }
  };
