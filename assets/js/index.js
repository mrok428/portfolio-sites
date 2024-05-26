import React from 'react';
import ReactDOM from 'react-dom';

const App = () => {
    return (
        <div>
            <h1>Hello, React!</h1>
        </div>
    );
};

ReactDOM.render(<App />, document.getElementById('root'));

// SCSSファイルを一括でインポート
function importAll(r) {
    r.keys().forEach(r);
}


// 'scss/pages'ディレクトリ内のすべてのSCSSファイルをインポート
importAll(require.context('../scss/pages', true, /\.scss$/));

// 'scss/base'ディレクトリ内のすべてのSCSSファイルをインポート
importAll(require.context('../scss/base', true, /\.scss$/));

// 'scss/components'ディレクトリ内のすべてのSCSSファイルをインポート
importAll(require.context('../scss/components', true, /\.scss$/));

// 'scss/layout'ディレクトリ内のすべてのSCSSファイルをインポート
importAll(require.context('../scss/layout', true, /\.scss$/));

// 'scss/pages'ディレクトリ内のすべてのSCSSファイルをインポート
importAll(require.context('../scss/pages', true, /\.scss$/));

// 'scss/themes'ディレクトリ内のすべてのSCSSファイルをインポート
importAll(require.context('../scss/themes', true, /\.scss$/));

// 'scss/utils'ディレクトリ内のすべてのSCSSファイルをインポート
importAll(require.context('../scss/utils', true, /\.scss$/));
