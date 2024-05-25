import React from 'react';

const Layout2 = ({ content }) => {
    console.log('Layout2 component has been rendered'); // コンソールログを追加
    return (
        <div className="layout2">
            <h1>Layout 2</h1> {/* 特定のテキストを追加 */}
            <div dangerouslySetInnerHTML={{ __html: content }} />
        </div>
    );
};

export default Layout2;
