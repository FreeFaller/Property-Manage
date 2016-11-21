package com.example.qbaobao.myapplication;

import android.content.DialogInterface;
import android.content.Intent;
import android.net.Uri;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.view.animation.BounceInterpolator;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    private Button btn1,btn2,btn3,btn4,btn5,btn6,btn8,minset,cheap;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        getSupportActionBar().hide();
        setContentView(R.layout.activity_main);
        btn1 = (Button)findViewById(R.id.button);
        btn2 = (Button)findViewById(R.id.button14);
        btn3 = (Button)findViewById(R.id.button15);
        btn4 = (Button)findViewById(R.id.button16);
        btn5 = (Button)findViewById(R.id.button17);
        btn6 = (Button)findViewById(R.id.button18);
        btn8 = (Button)findViewById(R.id.button20);
        minset = (Button)findViewById(R.id.minesetting1_3);
        cheap = (Button)findViewById(R.id.cheap1_2);
        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.Inform1Activity");
                startActivity(i);
            }
        });

        btn2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.Manage2Activity");
                startActivity(i);
            }
        });
        btn3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.Menu3Activity");
                startActivity(i);
            }
        });
        btn4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.Suggest4Activity");
                startActivity(i);
            }
        });
        btn5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.Manage5Activity");
                startActivity(i);
            }
        });
        btn6.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                 DialogInterface.OnClickListener click1=new DialogInterface.OnClickListener()
                {
                    @Override
                    public void onClick(DialogInterface arg0,int arg1)
                    {
                        Intent in2 = new Intent();
                        in2.setAction(Intent.ACTION_CALL);
                        in2.setData(Uri.parse("tel:1828033985"));
                        startActivity(in2);
                    }
                 };
                DialogInterface.OnClickListener click2=new DialogInterface.OnClickListener()
                {
                    @Override
                    public void onClick(DialogInterface arg0,int arg1)
                    {
                        arg0.cancel();
                    }
                };
                AlertDialog.Builder alertdialogbuilder=new AlertDialog.Builder(MainActivity.this);
                alertdialogbuilder.setMessage("18280339875");
                alertdialogbuilder.setPositiveButton("确定", click1);
                alertdialogbuilder.setNegativeButton("取消", click2);
                AlertDialog alertdialog1=alertdialogbuilder.create();
                alertdialog1.show();


            }
        });
        btn8.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.Usage8Activity");
                startActivity(i);
            }
        });
        minset.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.MineSettingActivity");
                startActivity(i);
            }
        });
        cheap.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.CheapActivity");
                startActivity(i);
            }
        });

    }


}
