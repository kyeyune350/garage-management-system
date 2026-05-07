export default function GarageDashboard() {
  const recentServices = [
    {
      receipt: 'SRV-20260507-001',
      customer: 'KYEYUNE IDRISA',
      vehicle: 'Toyota Corolla',
      mechanic: 'Sulaiman',
      amount: 'UGX 100,000',
      status: 'Paid',
    },
    {
      receipt: 'SRV-20260507-002',
      customer: 'MICHEAL',
      vehicle: 'BMW X5',
      mechanic: 'Byamugisha',
      amount: 'UGX 350,000',
      status: 'Pending',
    },
    {
      receipt: 'SRV-20260507-003',
      customer: 'RONALD',
      vehicle: 'Honda Civic',
      mechanic: 'Enock',
      amount: 'UGX 120,000',
      status: 'Paid',
    },
  ];

  return (
    <div className="min-h-screen bg-gray-100 flex font-sans">
      <aside className="w-64 bg-green-950 text-white p-6 flex flex-col justify-between">
        <div>
          <div className="mb-10">
            <h1 className="text-2xl font-bold">Garage DBMS</h1>
            <p className="text-sm text-gray-300 mt-1">Vehicle Service System</p>
          </div>

          <nav className="space-y-3">
            <button className="w-full text-left px-4 py-3 rounded-xl bg-green-800 hover:bg-green-700 transition">
              Dashboard
            </button>
            <button className="w-full text-left px-4 py-3 rounded-xl hover:bg-green-800 transition">
              Customers
            </button>
            <button className="w-full text-left px-4 py-3 rounded-xl hover:bg-green-800 transition">
              Vehicles
            </button>
            <button className="w-full text-left px-4 py-3 rounded-xl hover:bg-green-800 transition">
              Mechanics
            </button>
            <button className="w-full text-left px-4 py-3 rounded-xl hover:bg-green-800 transition">
              Services
            </button>
            <button className="w-full text-left px-4 py-3 rounded-xl hover:bg-green-800 transition">
              Payments
            </button>
            <button className="w-full text-left px-4 py-3 rounded-xl hover:bg-green-800 transition">
              Reports
            </button>
          </nav>
        </div>

        <div className="border-t border-green-800 pt-4">
          <p className="font-semibold">Manager User</p>
          <p className="text-sm text-gray-300">Garage Manager</p>
          <button className="mt-3 text-red-300 hover:text-red-100">
            Log out
          </button>
        </div>
      </aside>

      <main className="flex-1 p-6">
        <div className="bg-white rounded-2xl shadow-sm p-6 mb-6 flex justify-between items-center">
          <div>
            <h2 className="text-3xl font-bold text-gray-800">Garage Management Dashboard</h2>
            <p className="text-gray-500 mt-2">
              Manage vehicle repairs, appointments, mechanics and payments.
            </p>
          </div>

          <div className="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-xl w-72">
            <p className="text-sm text-gray-500">BUSINESS DATE</p>
            <h3 className="font-bold text-lg">07 May 2026</h3>
            <p className="text-sm mt-3 text-gray-500">ACCESS LEVEL</p>
            <p className="font-semibold">Garage Manager</p>
          </div>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-6">
          <div className="bg-white rounded-2xl shadow-sm p-6">
            <h3 className="text-2xl font-semibold mb-6">Book Service Appointment</h3>

            <div className="space-y-4">
              <div>
                <label className="block mb-2 font-medium">Customer</label>
                <select className="w-full border rounded-xl p-3">
                  <option>KYEYUNE IDRISA</option>
                  <option>MICHEAL</option>
                  <option>RONALD</option>
                </select>
              </div>

              <div>
                <label className="block mb-2 font-medium">Vehicle</label>
                <select className="w-full border rounded-xl p-3">
                  <option>Toyota Corolla</option>
                  <option>BMW X5</option>
                  <option>Honda Civic</option>
                </select>
              </div>

              <div>
                <label className="block mb-2 font-medium">Service Type</label>
                <select className="w-full border rounded-xl p-3">
                  <option>Oil Change</option>
                  <option>Engine Repair</option>
                  <option>Wheel Alignment</option>
                </select>
              </div>

              <div>
                <label className="block mb-2 font-medium">Mechanic</label>
                <select className="w-full border rounded-xl p-3">
                  <option>Sulaiman</option>
                  <option>Byamugisha</option>
                  <option>Enock</option>
                </select>
              </div>

              <div>
                <label className="block mb-2 font-medium">Appointment Date</label>
                <input
                  type="date"
                  className="w-full border rounded-xl p-3"
                />
              </div>

              <div>
                <label className="block mb-2 font-medium">Payment Method</label>
                <select className="w-full border rounded-xl p-3">
                  <option>Cash</option>
                  <option>Mobile Money</option>
                  <option>Bank</option>
                </select>
              </div>

              <button className="w-full bg-green-900 hover:bg-green-800 text-white py-3 rounded-xl font-semibold transition">
                Save Appointment
              </button>
            </div>
          </div>

          <div className="bg-white rounded-2xl shadow-sm p-6 overflow-auto">
            <h3 className="text-2xl font-semibold mb-6">Recent Service Records</h3>

            <table className="w-full text-left border-collapse">
              <thead>
                <tr className="border-b bg-gray-50">
                  <th className="p-3">Receipt</th>
                  <th className="p-3">Customer</th>
                  <th className="p-3">Vehicle</th>
                  <th className="p-3">Mechanic</th>
                  <th className="p-3">Amount</th>
                  <th className="p-3">Status</th>
                </tr>
              </thead>

              <tbody>
                {recentServices.map((service, index) => (
                  <tr key={index} className="border-b hover:bg-gray-50">
                    <td className="p-3">{service.receipt}</td>
                    <td className="p-3">{service.customer}</td>
                    <td className="p-3">{service.vehicle}</td>
                    <td className="p-3">{service.mechanic}</td>
                    <td className="p-3">{service.amount}</td>
                    <td className="p-3">{service.status}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  );
}
