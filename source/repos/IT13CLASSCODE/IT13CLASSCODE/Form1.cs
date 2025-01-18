namespace IT13CLASSCODE
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            // string a = textinput.Text;
            // MessageBox.Show(a);
            //  label1.Text = a;

            int num1 = int.Parse(textinput.Text);
            int num2 = int.Parse(textinput2.Text);


            string result = (num1 + num2).ToString();

            textbox3.Text = result;



        }

        private void Form1_Load(object sender, EventArgs e)
        {
            //   MessageBox.Show("Form 1");
        }

        private void textinput_TextChanged(object sender, EventArgs e)
        {


        }
        private void textinput2_TextChanged(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            int num1 = int.Parse(textinput.Text);
            int num2 = int.Parse(textinput2.Text);


            string result = (num1 - num2).ToString();

            textbox3.Text = result;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            int num1 = int.Parse(textinput.Text);
            int num2 = int.Parse(textinput2.Text);


            string result = (num1 * num2).ToString();

            textbox3.Text = result;
        }

        private void button3_Click(object sender, EventArgs e)
        {
            int num1 = int.Parse(textinput.Text);
            int num2 = int.Parse(textinput2.Text);


            string result = (num1 / num2).ToString();

            textbox3.Text = result;
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }
    }
}
