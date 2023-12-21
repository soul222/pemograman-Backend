// TODO 3: Import data students dari folder data/students.js
// code here

// Membuat Class StudentController
class StudentController {
    index(req, res) {
      // TODO 4: Tampilkan data students
      // code here
      const data = {
        message: "Menampilkan data student",
        data: students
      };

      res.json(data);
    }
  
    store(req, res) {
      const { nama } = req.body;
      // TODO 5: Tambahkan data students
      // code here
      students.push(nama);

      const data = {
          message: `Menambahkan data students : ${nama}`,
          data: students
      };

      res.json(data);
    }
  
    update(req, res) {
      const { id } = req.params;
      const { nama } = req.body;
      // TODO 6: Update data students
      // code here
      students[id] = nama;

      const data = {
        message: `Mengedit data students id ${id}, nama ${nama}`,
        data: students
      };

      res.json(data);
    }
  
    destroy(req, res) {
      const { id } = req.params;
      // TODO 7: Hapus data students
      // code here
      students.splice(id, 1);

      const data = {
          message: `Menghapus data students ${id}`,
          data: students
      };

      res.json(data);
    }
  }
  
  // Membuat object StudentController
  const object = new StudentController();
  
  // Export object StudentController
  module.exports = object;