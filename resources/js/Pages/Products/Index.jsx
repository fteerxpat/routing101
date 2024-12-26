import { Link } from '@inertiajs/react';

export default function Index({ products }) {
  return (
    <>
      <h1 style={{ textAlign: 'center', color: '#0056b3' }}>Product Index</h1>
      <hr />
      <div style={{ maxWidth: '800px', margin: '0 auto', padding: '20px', backgroundColor: '#e6f2ff', borderRadius: '8px' }}>
        <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(200px, 1fr))', gap: '20px' }}>
          {products.map((product) => (
            <div key={product.id} style={{ padding: '10px', border: '1px solid #b3d1ff', borderRadius: '8px', backgroundColor: '#ffffff' }}>
                <img src={product.image} alt="Products" style={{ display: 'block', margin: '0 auto', borderRadius: '8px' }} />
              <Link
                href={`/products/${product.id}`}
                style={{ textDecoration: 'none', color: '#0056b3', fontWeight: 'bold' }}
              >
                {product.name} - ${product.price}
              </Link>
            </div>
          ))}
        </div>
      </div>
    </>
  );
}
