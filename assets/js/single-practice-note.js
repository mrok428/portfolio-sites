import React, { useEffect, useState, lazy, Suspense } from 'react';
import { createRoot } from 'react-dom/client';

const LayoutDefault = lazy(() => import('@layouts/layout-default'));

const PracticeNote = ({ id, layout }) => {
    const [note, setNote] = useState(null);

    useEffect(() => {
        fetch(`/wp-json/wp/v2/practice-note/${id}`)
            .then(response => response.json())
            .then(data => setNote(data));
    }, [id]);

    if (!note) {
        return <div>Loading...</div>;
    }

    // 動的にレイアウトコンポーネントを決定
    let LayoutComponent;
    try {
        LayoutComponent = lazy(() => import(`@layouts/layout-${layout}`));
        console.log(`Loading layout: layout-${layout}`);
    } catch (error) {
        console.log('Error loading layout:', error);
        LayoutComponent = LayoutDefault;
    }

    return (
        <Suspense fallback={<div>Loading...</div>}>
            <LayoutComponent content={note.content.rendered} />
        </Suspense>
    );
};

const rootElement = document.getElementById('root');
if (rootElement) {
    const postId = rootElement.getAttribute('data-post-id');
    const pathParts = window.location.pathname.split('/').filter(Boolean);
    const layoutIdentifier = pathParts[pathParts.length - 1];

    console.log('Post ID:', postId);
    console.log('Layout Identifier:', layoutIdentifier);

    const root = createRoot(rootElement); // React 18のcreateRootを使用
    root.render(<PracticeNote id={postId} layout={layoutIdentifier} />);
}
