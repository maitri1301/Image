import React from 'react';
import { Carousel } from 'react-responsive-carousel';
import 'react-responsive-carousel/lib/styles/carousel.min.css';

const Save = ({ attributes }) => {
  const { images } = attributes;

  return (
    <div className="slider-container">
      <Carousel showThumbs={false} showStatus={false} dynamicHeight={true}>
        {images.map((image, index) => (
          <div key={index}>
            <img src={image.url} alt={image.alt} />
          </div>
        ))}
      </Carousel>
    </div>
  );
};

export default Save;