using System;
using System.Collections.Generic;
using System.Configuration;
using System.Data.SqlClient;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace SqlInjection.Web
{
    public partial class Login : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void btnLogin_Click(object sender, EventArgs e)
        {
            SqlConnection connection = new SqlConnection(ConfigurationManager.ConnectionStrings["StudentDBConnectionString"].ConnectionString);

            SqlCommand command = new SqlCommand();
            command.Connection = connection;
            //command.CommandText = "SELECT * FROM StudentMasters WHERE StdName='" + txtUsername.Text + "' and Password='"+txtPassword.Text+"'";
            command.CommandText = "SELECT * FROM dummy_users WHERE username=@name and password=@password";
            command.Parameters.AddWithValue("name", txtUsername.Text);
            command.Parameters.AddWithValue("password", txtPassword.Text);

            connection.Open();
            SqlDataReader reader = command.ExecuteReader();

            if (reader.HasRows)
                Response.Redirect("/");

            reader.Close();
        }
    }
}