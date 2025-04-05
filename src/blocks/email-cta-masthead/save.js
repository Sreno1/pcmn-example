import {__} from '@wordpress/i18n';
import {useBlockProps, RichText} from '@wordpress/block-editor';

export default function save({attributes}) {

	const {content, align, backgroundColor, textColor, kaLink, linkLabel, hasLinkNofollow} = attributes;

	const blockProps = useBlockProps.save({
		className: `has-text-align-${align}`
	});

	return (
		<div
			{...blockProps}
			style={{backgroundColor: backgroundColor}}
		>
			<RichText.Content
				tagName="p"
				value={content}
				style={{color: textColor}}
			/>
			<p>
				<a
					href={kaLink}
					className="stroke-pill"
					rel={hasLinkNofollow ? "nofollow" : "noopener noreferrer"}
				>
					{linkLabel}
				</a>
			</p>
		</div>
	);
}
