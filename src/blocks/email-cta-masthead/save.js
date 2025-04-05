import {__} from '@wordpress/i18n';
import {useBlockProps, RichText} from '@wordpress/block-editor';

export default function save({attributes}) {
	const blockProps = useBlockProps.save();
	const {content, align, backgroundColor, textColor} = attributes;
	return (
		<RichText.Content
			{...blockProps}
			tagName="p"
			value={content}
			style={{textAlign: align, backgroundColor: backgroundColor, color: textColor}}
		/>
	);
}
