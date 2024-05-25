import React from 'react';

const Layout1 = ({ content }) => {
    console.log('Layout1 component has been rendered'); // コンソールログを追加
    return (
        <div className="layout1">
            <h1>Layout 1</h1> {/* 特定のテキストを追加 */}
            <div dangerouslySetInnerHTML={{ __html: content }} />
        </div>
    );
};

export default Layout1;
