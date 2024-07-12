import { registerBlockType } from '@wordpress/blocks';
import { TextControl } from '@wordpress/components';
import { useBlockProps } from '@wordpress/block-editor';

registerBlockType('wp-gutenberg/sketchfab', {
    title: 'Sketchfab embed',
    icon: 'video-alt3',
    category: 'embed',
    attributes: {
        url: {
            type: 'string',
            default: ''
        }
    },
    edit: ({ attributes, setAttributes }) => {
        const blockProps = useBlockProps();
        return (
            <div {...blockProps}>
                <TextControl
                    label="Sketchfab URL"
                    value={attributes.url}
                    onChange={(url) => setAttributes({ url })}
                />
                {attributes.url && (
                    <iframe
                        title="Sketchfab"
                        width="600"
                        height="450"
                        src={`${attributes.url}/embed`}
                        allow="autoplay; fullscreen; vr"
                    ></iframe>
                )}
            </div>
        );
    },
    save: ({ attributes }) => {
        const blockProps = useBlockProps.save();
        return (
            <div {...blockProps}>
                {attributes.url && (
                    <iframe
                        title="Sketchfab"
                        width="600"
                        height="450"
                        src={`${attributes.url}/embed`}
                        allow="autoplay; fullscreen; vr"
                    ></iframe>
                )}
            </div>
        );
    }
});
