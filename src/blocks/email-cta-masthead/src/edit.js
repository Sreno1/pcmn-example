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
import {TextControl, PanelBody} from '@wordpress/components';

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

    const {
        headingStart,
        pinkText,
        headingEnd,
        contentText,
        inputText,
        buttonText,
        imageURL,
        imageAlt,
        marqueeText
    } = attributes;

    return (

        <div {...useBlockProps()}>
            <InspectorControls>
                <PanelBody title="Block Settings">
                    <TextControl
                        label="Heading Start"
                        value={headingStart}
                        onChange={(value) => setAttributes({headingStart: value})}
                    />
                    <TextControl
                        label="Pink Text"
                        value={pinkText}
                        onChange={(value) => setAttributes({pinkText: value})}
                    />
                    <TextControl
                        label="Heading End"
                        value={headingEnd}
                        onChange={(value) => setAttributes({headingEnd: value})}
                    />
                    <TextControl
                        label="Content Text"
                        value={contentText}
                        onChange={(value) => setAttributes({contentText: value})}
                    />
                    <TextControl
                        label="Input Text"
                        value={inputText}
                        onChange={(value) => setAttributes({inputText: value})}
                    />
                    <TextControl
                        label="Button Text"
                        value={buttonText}
                        onChange={(value) => setAttributes({buttonText: value})}
                    />
                    <TextControl
                        label="Image URL"
                        value={imageURL}
                        onChange={(value) => setAttributes({imageURL: value})}
                    />
                    <TextControl
                        label="Image Alt"
                        value={imageAlt}
                        onChange={(value) => setAttributes({imageAlt: value})}
                    />
                    <TextControl
                        label="Marquee Text"
                        value={marqueeText}
                        onChange={(value) => setAttributes({marqueeText: value})}
                    />
                </PanelBody>
            </InspectorControls>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>{headingStart}</h2>
                        <h2>{pinkText}</h2>
                        <h2>{headingEnd}</h2>
                        <p>{contentText}</p>
                        <input type="text" placeholder={inputText}/>
                        <button className="solid-pill">{buttonText}</button>
                    </div>
                    <div class="col">
                        <img src={imageURL} alt={imageAlt}></img>
                    </div>
                </div>
                <div class="row">
                    <p>{marqueeText}</p>
                </div>
            </div>
        </div>
    );
}
