// import model student
const Student = require("../models/student")

class StudentController {
    async index(req, res) {
        // TODO 4: Tampilkan data students
        const students = await Student.all();

        const data = {
            message: "Menampilkan data student",
            data: students
        };

        res.status(200).json(data);
    }

    async store(req, res) {
        /**
         * TODO 2: memanggil method create.
         * Method create mengembalikan data yang baru diinsert.
         * Mengembalikan response dalam bentuk json.
         */

        const students = await Student.create(req.body);
        const data = {
            message: "Menambahkan data student",
            data: students,
        };

        res.status(201).json(data);
    }


    async update(req, res) {
        /**
         * check id students
         * jika ada, lakukan update
         * jika tidak, kirim data tidak ada
         */
        const { id } = req.params;

        const students = await Student.find(id);

        if (students) {
            // update data
            const studentUpdated = await Student.update(id, req.body);
            const data = {
                message: "Mengupdate data student",
                data: studentUpdated,
            };

            res.status(200).json(data);
        }
        else {
            // kirim data tidak ada
            const data = {
                message: "Data tidak ada",
            };

            res.status(404).json(data);
        }



    }

    async destroy(req, res) {
        const { id } = req.params;

        /**
         * cari id
         * jika ada, hapus data
         * jika tidak, kirim data tidak ada
         */

        const student = await Student.find(id);

        if (student) {
            // hapus data
            await Student.delete(id);
            const data = {
                message: "Menghapus data student",
            };

            res.status(200).json(data);
        }
        else {
            // data tidak ada
            const data = {
                message: "Data tidak ada",
            };

            res.status(404).json(data);
        }
    }

    async show(req, res) {
        /**
         * cari id
         * jika ada, kirim datanya
         * jika tidak, kirim data tidak ada
         */
        const { id } = req.params;

        const student = await Student.find(id);

        if (student) {
            const data = {
                message: "Menampilkan detail data student",
                data: student,
            };

            res.status(200).json(data);
        }
        else {
            const data = {
                message: "Data tidak ada",
            };

            res.status(404).json(data);
        }

    }
}

// make an object Student Controller
const object = new StudentController();

// export object
module.exports = object;