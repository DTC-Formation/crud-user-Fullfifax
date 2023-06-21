import React from 'react';

function Card({ linkPath, title, textColor, bgColor }) {
  return (
    <div className={`max-w-sm rounded overflow-hidden shadow-lg text-${textColor} text-center bg-${bgColor}`}>
      <a href={linkPath}>
        <div className="px-6 py-4">
          <div className="font-bold text-xl mb-2">{title}</div>
        </div>
      </a>
    </div>
  );
}

export default Card;