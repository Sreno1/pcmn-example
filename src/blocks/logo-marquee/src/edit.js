/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import {__} from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
 */
import {useBlockProps, InspectorControls} from '@wordpress/block-editor';
import {TextControl, TextareaControl, PanelBody} from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 * @return {WPElement} Element to render.
 */
export default function Edit({attributes, setAttributes}) {
    const num = 7;
    const {
        introText,
        image1URL,
        image1Alt,
        image2URL,
        image2Alt,
        image3URL,
        image3Alt,
        image4URL,
        image4Alt,
        image5URL,
        image5Alt,
        image6URL,
        image6Alt,
        image7URL,
        image7Alt
    } = attributes;

    const imageURLs = [
        image1URL,
        image2URL,
        image3URL,
        image4URL,
        image5URL,
        image6URL,
        image7URL
    ];

    const imageAlts = [
        image1Alt,
        image2Alt,
        image3Alt,
        image4Alt,
        image5Alt,
        image6Alt,
        image7Alt
    ];

    const setImageURL = (index, value) => {
        const newImageURLs = [...imageURLs];
        newImageURLs[index] = value;
        setAttributes({[`image${index + 1}URL`]: value});
    }

    const setImageAlt = (index, value) => {
        const newImageAlts = [...imageAlts];
        newImageAlts[index] = value;
        setAttributes({[`image${index + 1}ALT`]: value});
    }

    const setImageAttributes = (index, url, alt) => {
        setImageURL(index, url);
        setImageAlt(index, alt);
    }

    const imageElements = [...Array(num)].map((_, index) => (
        <div key={index} className="col">
            <img
                src={imageURLs[index]}
                alt={imageAlts[index]}
                onChange={(value) => setImageAttributes(index, value)}
            />
        </div>
    ));

    return (
        <div {...useBlockProps()}>
            <InspectorControls>
                <PanelBody title={__('Block Settings', 'pcmn-example')}>
                    <TextControl
                        label={__('Intro Text', 'pcmn-example')}
                        value={introText}
                        onChange={(value) => setAttributes({introText: value})}
                    />
                    {[...Array(num)].map((_, index) => (
                        <div key={index}>
                            <TextControl
                                label={__('Image ' + parseInt(index + 1) + ' URL', 'pcmn-example')}
                                value={imageURLs[index]}
                                onChange={(value) => setImageURL(index, value)}
                            />
                            <TextControl
                                label={__('Image ' + parseInt(index + 1) + ' Alt', 'pcmn-example')}
                                value={imageAlts[index]}
                                onChange={(value) => setImageAlt(index, value)}
                            />
                        </div>
                    ))}
                </PanelBody>
            </InspectorControls>
            <div className="container">
                <div className="row">
                    {imageElements}
                </div>
            </div>
        </div>
    )
}
