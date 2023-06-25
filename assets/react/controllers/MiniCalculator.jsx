import React from 'react';

const MiniCalculator = ({ inputStyle, routePath }) => {
  return (
    <div className="mt-6">
      <h2 className="text-center text-2xl text-white mb-4 font-bold">
        Mini calculator + Redirection to result
      </h2>
      <form action={routePath}>
        <input className={inputStyle} type="text" name="nombre-a" placeholder="First number" />
        <input className={inputStyle} type="text" name="signe" placeholder="Operator" />
        <input className={inputStyle} type="text" name="nombre-b" placeholder="Second number" />
        <input
          className="text-white bg-orange hover:bg-orange focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto text-center dark:bg-orange dark:hover:bg-orange dark:focus:ring-blue-800"
          style={{ width: '100%', padding: '0.8em' }}
          type="submit"
        />
      </form>
    </div>
  );
};

export default MiniCalculator;