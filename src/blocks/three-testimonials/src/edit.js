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

	const {
		headingText,
		test1Text,
		test1Name,
		test1BusName,
		test2Text,
		test2Name,
		test2BusName,
		test3Text,
		test3Name,
		test3BusName
	} = attributes;

	return (

		<div {...useBlockProps()}>
			<InspectorControls>
				<PanelBody title="Block Settings">
					<TextControl
						label="Heading Text"
						value={headingText}
						onChange={(value) => setAttributes({headingText: value})}
					/>
					<TextControl
						label="Testimonial 1 Text"
						value={test1Text}
						onChange={(value) => setAttributes({test1Text: value})}
					/>
					<TextControl
						label="Testimonial 1 Name"
						value={test1Name}
						onChange={(value) => setAttributes({test1Name: value})}
					/>
					<TextControl
						label="Testimonial 1 Business Name"
						value={test1BusName}
						onChange={(value) => setAttributes({test1BusName: value})}
					/>
					<TextControl
						label="Testimonial 2 Text"
						value={test2Text}
						onChange={(value) => setAttributes({test2Text: value})}
					/>

					<TextControl
						label="Testimonial 2 Name"
						value={test2Name}
						onChange={(value) => setAttributes({test2Name: value})}
					/>
					<TextControl
						label="Testimonial 2 Business Name"
						value={test2BusName}
						onChange={(value) => setAttributes({test2BusName: value})}
					/>
					<TextControl
						label="Testimonial 3 Text"
						value={test3Text}
						onChange={(value) => setAttributes({test3Text: value})}
					/>

					<TextControl
						label="Testimonial 3 Name"
						value={test3Name}
						onChange={(value) => setAttributes({test3Name: value})}
					/>
					<TextControl
						label="Testimonial 3 Business Name"
						value={test3BusName}
						onChange={(value) => setAttributes({test3BusName: value})}
					/>
				</PanelBody>
			</InspectorControls>
			<div class="container">
				<h2>testimonials</h2>
				<h3>{headingText}</h3>
				<div class="row">
					<div class="col">
						<p class="testText">{test1Text}</p>
						<p class="testName">{test1Name}</p>
						<p class="testBus">{test1BusName}</p>
					</div>
					<div class="col">
						<p class="testText">{test2Text}</p>
						<p class="testName">{test2Name}</p>
						<p class="testBus">{test2BusName}</p>
					</div>
					<div class="col">
						<p class="testText">{test3Text}</p>
						<p class="testName">{test3Name}</p>
						<p class="testBus">{test3BusName}</p>
					</div>
				</div>
			</div>
		</div>
	);
}
