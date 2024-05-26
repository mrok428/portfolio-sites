const path = require('path');

module.exports = {
    mode: 'development',
    entry: {
        main: './assets/js/index.js',
        'single-practice-note': './assets/js/single-practice-note.js',
    },
    output: {
        filename: '[name].bundle.js',
        path: path.resolve(__dirname, 'dist'),
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    'style-loader',
                    'css-loader',
                    'sass-loader'
                ],
            },
            {
                test: /\.(js|jsx)$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env', '@babel/preset-react']
                    }
                }
            }
        ],
    },
    resolve: {
        extensions: ['.js', '.jsx'],
        alias: {
            '@layouts': path.resolve(__dirname, 'assets/js/layouts'),
        }
    },
};
