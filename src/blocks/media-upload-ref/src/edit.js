import {__} from '@wordpress/i18n';
import {useBlockProps} from '@wordpress/block-editor';
import './editor.scss';
import {MediaUploadCheck, MediaUpload} from '@wordpress/block-editor';
import {Button} from '@wordpress/components';

export default function Edit(props) {
	const {attributes, setAttributes} = props;

	const {
		avatarId,
		avatarUrl,
	} = attributes;
	return (
		<div {...useBlockProps()}>
			<MediaUploadCheck>
				<MediaUpload
					onSelect={(media) => {
						setAttributes({
							avatarId: media.id,
							avatarUrl: media.url,
						});
					}}
					title={__('Select an Avatar', 'media-upload-ref')}
					mode={'upload'}
					multiple={false}
					allowedTypes={['image']}
					value={avatarId}
					render={({open}) => (
						<>
							<Button
								variant="secondary"
								onClick={() => {
									open();
								}}
							>
								{__('Upload Avatar', 'media-upload-ref')}
							</Button>
							{
								avatarUrl && (
									<img
										src={avatarUrl}
										alt={__('Avatar', 'media-upload-ref')}
										style={{
											display: 'block',
											maxWidth: '250px',
											height: 'auto',
										}}
									/>
								)
							}
						</>
					)}
				/>
			</MediaUploadCheck>
		</div>
	);
}
