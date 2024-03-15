/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from '@wordpress/block-editor';

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
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */

import React from 'react';
import { MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import { Carousel } from 'react-responsive-carousel';
import 'react-responsive-carousel/lib/styles/carousel.min.css';


const Edit = ({ attributes, setAttributes }) => {
  const { images } = attributes;

  const onImageSelect = (newImages) => {
    setAttributes({ images: newImages.map(({ id, url, alt }) => ({ id, url, alt })) });
  };

  const removeImage = (index) => {
    const newImages = [...images];
    newImages.splice(index, 1);
    setAttributes({ images: newImages });
  };

  return (
    <div>
      <MediaUploadCheck>
        <MediaUpload
          onSelect={onImageSelect}
          allowedTypes={['image']}
          multiple={true}
          gallery={true}
          value={images.map(({ id }) => id)}
          render={({ open }) => (
            <Button onClick={open} >{__('Upload Images')}</Button>
          )}
        />
      </MediaUploadCheck>
      {images.length > 0 && (
        <div className="slider-thumbnails">
          <Carousel>
            {images.map((image, index) => (
              <div key={index} className="thumbnail">
                <img src={image.url} alt={image.alt} />
                <Button onClick={() => removeImage(index)} isDestructive>{__('Remove')}</Button>
              </div>
            ))}
          </Carousel>
        </div>
      )}
    </div>
  );
};

export default Edit;