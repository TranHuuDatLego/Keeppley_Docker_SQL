// Import các thư viện cần thiết
const express = require('express');
const path = require('path');
const bodyParser = require('body-parser');
const session = require('express-session'); // Import express-session

// npm i body-parser dotenv ejs express express-session multer mysql nodemon sequelize sequelize-cli session

// Khởi tạo ứng dụng Express
const app = express();

// Cấu hình view engine là EJS
app.set('view engine', 'ejs');

// Middleware để chọn thư mục views dựa trên ngôn ngữ
app.use((req, res, next) => {
  const lang = req.query.lang || 'en'; // Giả sử truyền ngôn ngữ qua query parameter 'lang'
  const viewsDir = lang === 'vn' ? 'vn' : 'en';
  app.set('views', path.join(__dirname, viewsDir));
  next();
});


// Lấy thư mục ảnh
app.use(express.static(path.join(__dirname, 'public')));

// Hàm để phục vụ tệp hình ảnh
const getImage = (res, imagePath) => {
  // Xác định kiểu nội dung dựa trên phần mở rộng tệp
  const extname = String(path.extname(imagePath)).toLowerCase();
  const mimeTypes = {
    '.png': 'image/png',
    '.jpg': 'image/jpeg',
    '.jpeg': 'image/jpeg',
    '.gif': 'image/gif',
    '.svg': 'image/svg+xml',
    // Thêm các kiểu MIME khác nếu cần
  };

  const contentType = mimeTypes[extname] || 'application/octet-stream';

  fs.readFile(imagePath, (err, data) => {
    if (err) {
      res.writeHead(404, { 'Content-Type': 'text/html' });
      res.end(getMessageHTML('Hình ảnh không tồn tại!', true));
    } else {
      res.writeHead(200, { 'Content-Type': contentType });
      res.end(data);
    }
  });
};

app.use(bodyParser.urlencoded({ extended: true }));
app.use(session({
  secret: 'yourSecretKey',
  resave: false,
  saveUninitialized: true
}));

// --------------------------------------------------------------------------- //

// const loginHandler = require('./login'); // Import loginHandler từ login.js

// Sử dụng loginHandler cho route /login
// app.post('/login', loginHandler);

// const userRoutes = require('./user'); // Nhập file user.js
// Sử dụng các route từ user.js
// app.use(userRoutes);

// Middleware  duy trì đăng nhập
// function auth_user(req, res, next) {
//   res.locals. = req.session. || null; // Gắn `` vào `res.locals`
//   res.locals.success_message = req.session.success_message || null; // Gắn `` vào `res.locals`
//   next();
// }

// Định nghĩa route với middleware auth_user
app.get('/',  (req, res) => {
  const website = 'index.ejs'; // Lấy tên file từ URL
  
  console.log()
  res.render('index', { website });
});

app.get('/index',  (req, res) => {
  const website = 'index.ejs'; // Lấy tên file từ URL
  
  console.log()
  res.render('index', { website });
});

app.get('/head',  (req, res) => {
  res.render('head');
});

app.get('/ChooseLogin_en',  (req, res) => {
  const website = 'ChooseLogin_en.ejs'; // Lấy tên file từ URL
  
  res.render('ChooseLogin_en', { website });
});


app.get('/404',  (req, res) => {
  const website = '404.ejs';
  
  res.render('404', { website });
});

app.get('/Category_Product',  (req, res) => {
  const website = 'Category_Product.ejs';
  
  res.render('Category_Product', { website });
});

app.get('/Connections',  (req, res) => {
  const website = 'Connections.ejs';
  
  res.render('Connections', { website });
});

app.get('/doraemon',  (req, res) => {
  const website = 'doraemon.ejs';
  
  res.render('doraemon', { website });
});

app.get('/footer',  (req, res) => {
  const website = 'footer.ejs';
  
  res.render('footer', { website });
});

app.get('/footer_dark',  (req, res) => {
  const website = 'footer_dark.ejs';
  
  res.render('footer_dark', { website });
});

app.get('/form_login_en',  (req, res) => {
  const website = 'form_login_en.ejs';
  
  res.render('form_login_en', { website });
});

// --------------------------------------------------------------------------- //
 
const { upload, changeGeneral } = require('./changeGeneral');

// Sử dụng middleware để xử lý yêu cầu cập nhật thông tin người dùng
app.post('/changeGeneral', upload.single('profileImage'), changeGeneral);


app.get('/General',  (req, res) => {
  const website = 'General.ejs';
  
  res.render('General', { website });
});

app.get('/Avatar',  (req, res) => {
  const website = '/Avatar.ejs';
  
  res.render('Avatar', { website });
});

// const { upload, changeAvatar } = require('changeAvatar.js');

// // Định tuyến đến trang avatar và cập nhật ảnh
// app.post('/changeAvatar', upload.single('profileImage'), changeAvatar);

app.get('/Information',  (req, res) => {
  const website = 'Information.ejs';
  
  res.render('Information', { website });
});

app.get('/Keeppley_Products',  (req, res) => {
  const website = 'Keeppley_Products.ejs';
  
  res.render('Keeppley_Products', { website });
});

app.get('/Languages',  (req, res) => {
  const website = 'Languages.ejs';
  
  res.render('Languages', { website });
});

app.get('/LEGO_Products',  (req, res) => {
  const website = 'LEGO_Products.ejs';
  
  res.render('LEGO_Products', { website });
});

app.get('/Password',  (req, res) => {
  const website = 'Password.ejs';
  
  res.render('Password', { website });
});

app.get('/Notification',  (req, res) => {
  const website = 'Notification.ejs';
  
  res.render('Notification', { website });
});

app.get('/product',  (req, res) => {
  const website = 'product.ejs';
  
  console.log()
  res.render('product', { website });  
});

app.get('/product_detail',  (req, res) => {
  const website = 'product_detail.ejs';
  
  res.render('product_detail', { website });
});

app.get('/Qman_Products',  (req, res) => {
  const website = 'Qman_Products.ejs';
  
  res.render('Qman_Products', { website });
});

app.get('/sario',  (req, res) => {
  const website = 'sario.ejs';
  
  res.render('sario', { website });
});

app.get('/Sidebar',  (req, res) => {
  const website = 'Sidebar.ejs';
  
  res.render('Sidebar', { website });
});

app.get('/SocialLinks',  (req, res) => {
  const website = 'SocialLinks.ejs';
  
  res.render('SocialLinks', { website });
});

app.get('/login_again_en',  (req, res) => {
  const website = 'login_again_en.ejs';
  
  res.render('login_again_en', { website });
});

app.get('/logout', (req, res) => {
  // Hủy session
  req.session.destroy((err) => {
      if (err) {
          console.error('Không thể hủy session:', err);
          return res.status(500).send('Có lỗi xảy ra khi logout.');
      }

      // Xóa cookie của session (tùy chọn)
      res.clearCookie('connect.sid'); // 'connect.sid' là tên mặc định của cookie session trong express-session

      // Redirect đến trang đăng nhập hoặc trang chủ sau khi logout
      res.redirect('/');
  });
});



// ----------------------- Admin -------------------------------- //
app.get('/Admin/index',  (req, res) => {
  const website = 'index.ejs';
  
  res.render('Admin/index', { website });
});





// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });

// app.get('/Category_Product',  (req, res) => {
//   const website = 'Category_Product.ejs';
//   
//   res.render('Category_Product', { website });
// });
// Cấu hình cổng để server lắng nghe
const PORT = process.env.PORT || 3002;
app.listen(PORT, () => {
  console.log(`Server is running on http://localhost:${PORT}`);
});
