import React from 'react';

const LayoutDefault = ({ content }) => {
    console.log('LayoutDefault component has been rendered'); // コンソールログを追加
    return (
        <div className="default-layout">
            <h1>Default Layout</h1> {/* 特定のテキストを追加 */}
            <div dangerouslySetInnerHTML={{ __html: content }} />
        </div>
    );
};

export default LayoutDefault;
