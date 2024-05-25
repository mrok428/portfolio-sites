https://chatgpt.com/share/d84ff5a6-a7eb-4cec-afe3-ccde88a95263


### 構成
```
my-custom-theme/
│
├── assets/
│   ├── js/
│   │   ├── index.js
│   │   └── bundle.js
│   └── scss/
│       └── style.scss
│
├── style.css
├── index.php
├── functions.php
├── package.json
├── webpack.config.js
└── babel.config.json
```

### scssの導入
```
npm install --save-dev sass
```


### scssのコンパイル設定を`package.json`に追加
```
"scripts": {
    "sass": "sass --watch assets/scss/style.scss:style.css"
}
```

### scssのコンパイル
```
npm run sass
```

## React
### install
```
npm install react react-dom @babel/preset-react @babel/preset-env webpack webpack-cli webpack-dev-server babel-loader
```
### 

